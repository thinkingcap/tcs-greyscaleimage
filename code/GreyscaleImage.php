<?php
class GreyscaleImage extends DataExtension {
    public function Greyscale()
    {
        return $this->owner->getFormattedImage('Greyscale');
    }

    public function generateGreyscale(GD $gd)
    {
        return $gd->greyscale();
    }
}