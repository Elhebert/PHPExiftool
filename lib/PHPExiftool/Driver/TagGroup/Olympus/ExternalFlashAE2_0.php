<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalFlashAE2_0 extends AbstractTagGroup
{
    protected string $id = 'Olympus:ExternalFlashAE2_0';

    protected string $name = 'ExternalFlashAE2_0';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'External Flash AE2 0',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 178689
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Olympus::Main.Olympus:ExternalFlashAE2_0',
            'desc' => [
                'en' => 'External Flash AE2 0',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
