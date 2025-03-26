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
class ExternalFlashAE1 extends AbstractTagGroup
{
    protected string $id = 'Olympus:ExternalFlashAE1';

    protected string $name = 'ExternalFlashAE1';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'External Flash AE1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 178698
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Olympus::Main.Olympus:ExternalFlashAE1',
            'desc' => [
                'en' => 'External Flash AE1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
