<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContrastAuto extends AbstractTagGroup
{
    protected string $id = 'Canon:ContrastAuto';

    protected string $name = 'ContrastAuto';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Contrast Auto',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51876
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:ContrastAuto',
            'desc' => [
                'en' => 'Contrast Auto',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
