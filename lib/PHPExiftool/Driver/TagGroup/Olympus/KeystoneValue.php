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
class KeystoneValue extends AbstractTagGroup
{
    protected string $id = 'Olympus:KeystoneValue';

    protected string $name = 'KeystoneValue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Keystone Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::ImageProcessing
             * line : 176394
             * type : int16s
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Olympus::ImageProcessing.Olympus:KeystoneValue',
            'desc' => [
                'en' => 'Keystone Value',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
