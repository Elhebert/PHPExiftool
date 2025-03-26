<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModelTransform extends AbstractTagGroup
{
    protected string $id = 'IFD0:ModelTransform';

    protected string $name = 'ModelTransform';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Model Transform',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82463
             * type : double
             * writable : true
             * count : 16
             * flags :
             */
            'id' => 'Exif::Main.IFD0:ModelTransform',
            'desc' => [
                'en' => 'Model Transform',
            ],
        ],
    ];

    protected int $count = 16;

    protected int $flags = 2048;
}
