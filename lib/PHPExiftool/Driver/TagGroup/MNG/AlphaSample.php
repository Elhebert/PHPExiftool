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
class AlphaSample extends AbstractTagGroup
{
    protected string $id = 'MNG:AlphaSample';

    protected string $name = 'AlphaSample';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::BasisObject
             * line : 164666
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::BasisObject.MNG:AlphaSample',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
