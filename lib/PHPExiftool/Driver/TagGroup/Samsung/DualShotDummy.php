<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DualShotDummy extends AbstractTagGroup
{
    protected string $id = 'Samsung:DualShotDummy';

    protected string $name = 'DualShotDummy';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::DualShotExtra
             * line : 333863
             * type : undef
             * writable : false
             * count : 64
             * flags : permanent
             */
            'id' => 'Samsung::DualShotExtra.Samsung:DualShotDummy',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 64;

    protected int $flags = 4;
}
