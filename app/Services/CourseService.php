<?php

namespace App\Services;

use App\Repositories\CourseRepository;

class CourseService
{
    protected $repository;
    
    public function __construct(CourseRepository $courseRepository)
    {
        $this->repository = $courseRepository;
    }

    public function getCourses()
    {
        return $this->repository->getAllCourses();
    }

    public function store(array $data)
    {
        return $this->repository->store($data);
    }

    public function getCourseByUuid(string $id)
    {
        return $this->repository->getCourseByUuid($id);
    }

    public function deteleCourseByUuid(string $id)
    {
        return $this->repository->deleteCourseByUuid($id);
    }

    public function updateCourse(array $data, string $id)
    {
        return $this->repository->updateCourse($data, $id);
    }
}