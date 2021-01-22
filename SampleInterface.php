<?php 
namespace Interfaces\MainInterface;

interface SampleInterface
{
    public function create():void;
    public function read();
    public function update():void;
    public function delete():void;
}