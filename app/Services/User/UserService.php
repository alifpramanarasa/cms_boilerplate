<?php


namespace App\Services\User;


use App\Models\User;

use App\Services\AppService;
use App\Services\AppServiceInterface;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService extends AppService implements AppServiceInterface
{

    public function __construct(
        User $model, 
    )
    {
        parent::__construct($model);     
    }

    public function getAll($search = null)
    {
        $model = $this->model->query()->orderBy('created_at', 'DESC');

        $data = $model->get();

        if ($data) {
            return $this->sendSuccess(
                $data,
                'Users retrieved successfully'
            );
        } else {
            return $this->sendError(
                'Failed to retrieve Users'
            );
        }
    }

    public function getPaginated($search, $perPage, $page)
    {
        $model = $this->model->query()
        ->with('image')    
        ->orderBy('created_at', 'DESC');
        
        if ($search) {
            $model->where('name', 'like', '%' . $search . '%');
        }

        $data = $model->paginate($perPage, ['*'], 'page', $page);

        if ($data) {
            return $this->sendSuccess(
                $data,
                'Users retrieved successfully'
            );
        } else {
            return $this->sendError(
                'Failed to retrieve Users'
            );
        }
    }

    public function getById($id)
    {
        $data = $this->model->newQuery()        
        ->find($id);

        if ($data) {
            return $this->sendSuccess(
                $data,
                'User retrieved successfully'
            );
        } else {
            return $this->sendError(
                'Failed to retrieve User'
            );
        }
    }

    public function create($data)
    {
        DB::beginTransaction();

        try {

            $user = $this->model->newQuery()->create([
                'name'          =>  $data['name'],
                'email'         =>  $data['email'],
                'password'      =>  Hash::make($data['password']),
            ]);

            if (isset($data['role'])) {
                $user->assignRole($data['role']);
            }

            DB::commit();

            return $this->sendSuccess(
                $user,
                'User created successfully'
            );
        } catch (\Exception $exception) {
            DB::rollBack();

            return $this->sendError(
                $exception->getMessage()
            );
        }
    }

    public function update($id, $data)
    {
        $user   =   $this->model->newQuery()->find($id);

        DB::beginTransaction();

        try {

            $user->name         =   $data['name'];
            $user->email        =   $data['email'];
            $user->password     =   Hash::make($data['password']);
            $user->save();

            if (isset($data['role'])) {
                DB::table('model_has_roles')->where('model_id', $user->id)->delete();
                $user->assignRole($data['role']);
            }

            DB::commit();

            return $this->sendSuccess(
                $user,
                'User updated successfully'
            );
        } catch (\Exception $exception) {
            DB::rollBack();

            return $this->sendError(
                $exception->getMessage()
            );
        }
    }

    public function delete($id)
    {
        DB::beginTransaction();

        $read   =   $this->model->newQuery()->find($id);
        
        try {
            $read->delete();

            DB::commit();

            return $this->sendSuccess(
                null,
                'User deleted successfully'
            );
        } catch (\Exception $exception) {
            DB::rollBack();
            
            return $this->sendError(
                $exception->getMessage()
            );
        }
    }    
}
