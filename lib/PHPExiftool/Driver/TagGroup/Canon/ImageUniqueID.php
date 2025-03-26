<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageUniqueID extends AbstractTagGroup
{
    protected string $id = 'Canon:ImageUniqueID';

    protected string $name = 'ImageUniqueID';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Unique ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::Main
             * line : 50035
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:ImageUniqueID',
            'desc' => [
                'en' => 'Image Unique ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
