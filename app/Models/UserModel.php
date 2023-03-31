<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;
use App\Entities\UserInfo;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = User::class;
    protected $useSoftDeletes   = true;

    protected $allowedFields    = ['username', 'email', 'password', 'group'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['addGroup'];
    protected $afterInsert    = ['storeUserInfo'];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected $assignGroup;
    protected $infoUser;

    protected function addGroup($data)
    {
        $data['data']['group'] = $this->assignGroup;
        return $data;
    }

    public function withGroup(string $group)
    {
        $row = $this->db->table('groups')->where('name_group', $group)->get()->getFirstRow();

        if ($row != null) {
            $this->assignGroup = $row->id_group;
        }
    }

    public function addInfoUser(UserInfo $ui)
    {
        $this->infoUser = $ui;
    }

    protected function storeUserInfo($data)
    {
        $this->infoUser->id_user = $data['id'];
        $model = model('UserInfoModel');
        $model->insert($this->infoUser);
    }
}
