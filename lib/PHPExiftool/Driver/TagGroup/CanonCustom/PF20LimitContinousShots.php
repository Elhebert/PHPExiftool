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
class PF20LimitContinousShots extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:PF20LimitContinousShots';

    protected string $name = 'PF20LimitContinousShots';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'PF20 Limit Continous Shots',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::PersonalFuncs
             * line : 57108
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::PersonalFuncs.CanonCustom:PF20LimitContinousShots',
            'desc' => [
                'en' => 'PF20 Limit Continous Shots',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
