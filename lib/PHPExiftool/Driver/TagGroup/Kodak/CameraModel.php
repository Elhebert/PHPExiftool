<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraModel extends AbstractTagGroup
{
    protected string $id = 'Kodak:CameraModel';

    protected string $name = 'CameraModel';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Camera Model',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109414
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:CameraModel',
            'desc' => [
                'en' => 'Camera Model',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
