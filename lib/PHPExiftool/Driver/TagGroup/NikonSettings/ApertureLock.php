<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApertureLock extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:ApertureLock';

    protected string $name = 'ApertureLock';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Aperture Lock',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 167810
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:ApertureLock',
            'desc' => [
                'en' => 'Aperture Lock',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
