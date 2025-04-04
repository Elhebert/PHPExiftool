<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AdvertisingMaterialReference extends AbstractTagGroup
{
    protected string $id = 'MXF:AdvertisingMaterialReference';

    protected string $name = 'AdvertisingMaterialReference';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Advertising Material Reference',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114731
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:AdvertisingMaterialReference',
            'desc' => [
                'en' => 'Advertising Material Reference',
            ],
        ],
    ];

    protected int $count = 0;
}
