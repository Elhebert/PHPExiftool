<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageDepthAxis extends AbstractTagGroup
{
    protected string $id = 'File:ImageDepthAxis';

    protected string $name = 'ImageDepthAxis';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Depth Axis',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::Main
             * line : 113623
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::Main.File:ImageDepthAxis',
            'desc' => [
                'en' => 'Image Depth Axis',
            ],
        ],
    ];

    protected int $count = 0;
}
