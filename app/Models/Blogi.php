<?php namespace App\Models;
use CodeIgniter\Model;

class Blogi extends Model
{

    protected $table      = 'blogi';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['title', 'content'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'delete_at';
     }
