<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraType extends AbstractTagGroup
{
    protected string $id = 'Red:CameraType';

    protected string $name = 'CameraType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Camera Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Red::Main
             * line : 233007
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Red::Main.Red:CameraType',
            'desc' => [
                'en' => 'Camera Type',
            ],
        ],
    ];

    protected int $count = 0;
}
