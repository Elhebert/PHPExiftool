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
class ImageType extends AbstractTagGroup
{
    protected string $id = 'File:ImageType';

    protected string $name = 'ImageType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIF::Main
             * line : 85470
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIF::Main.File:ImageType',
            'desc' => [
                'en' => 'Image Type',
            ],
        ],
    ];

    protected int $count = 0;
}
