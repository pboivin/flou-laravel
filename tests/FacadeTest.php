<?php

namespace Pboivin\Flou\Laravel\Tests;

use Pboivin\Flou\Image;
use Pboivin\Flou\Laravel\Flou;

class FacadeTest extends TestCase
{
    public function test_can_process_image()
    {
        $this->copy([
            'square.jpg' => public_path('images/source/square.jpg'),
        ]);

        $image = Flou::image('square.jpg');

        $this->assertTrue($image instanceof Image);

        $this->assertTrue(file_exists($image->cached()->path()));
    }
}
