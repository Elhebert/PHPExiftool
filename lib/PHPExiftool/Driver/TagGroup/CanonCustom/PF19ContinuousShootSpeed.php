<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PF19ContinuousShootSpeed extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:PF19ContinuousShootSpeed';

    protected string $name = 'PF19ContinuousShootSpeed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::PersonalFuncs
             * line : 78404
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::PersonalFuncs.CanonCustom:PF19ContinuousShootSpeed',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
