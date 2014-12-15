<?php
namespace Application\Mappers;

class Users
{
    function public fetchAllUsers()
    {
        
        $data = getAdapted()->fetchAll();
        
        
        
        $this->entity->hydrate($data);
        
        
    }
}
