<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Version2 extends AbstractTagGroup
{
    protected string $id = 'Panasonic:Version2';

    protected string $name = 'Version2';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Version 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::PANA
             * line : 193822
             * type : string
             * writable : false
             * count : 14
             * flags : permanent
             */
            'id' => 'Panasonic::PANA.Panasonic:Version2',
            'desc' => [
                'en' => 'Version 2',
            ],
        ],
    ];

    protected int $count = 14;

    protected int $flags = 4;
}
