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
class CbCrGainDefault extends AbstractTagGroup
{
    protected string $id = 'Samsung:CbCrGainDefault';

    protected string $name = 'CbCrGainDefault';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Cb Cr Gain Default',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Type2
             * line : 235487
             * type : int32u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Samsung::Type2.Samsung:CbCrGainDefault',
            'desc' => [
                'en' => 'Cb Cr Gain Default',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
