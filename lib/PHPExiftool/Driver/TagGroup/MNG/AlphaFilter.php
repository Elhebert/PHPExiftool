<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AlphaFilter extends AbstractTagGroup
{
    protected string $id = 'MNG:AlphaFilter';

    protected string $name = 'AlphaFilter';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Alpha Filter',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::JNGHeader
             * line : 112125
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::JNGHeader.MNG:AlphaFilter',
            'desc' => [
                'en' => 'Alpha Filter',
            ],
        ],
    ];

    protected int $count = 0;
}
