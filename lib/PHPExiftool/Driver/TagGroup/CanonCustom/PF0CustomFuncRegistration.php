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
class PF0CustomFuncRegistration extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:PF0CustomFuncRegistration';

    protected string $name = 'PF0CustomFuncRegistration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'PF0 Custom Func Registration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::PersonalFuncs
             * line : 57054
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::PersonalFuncs.CanonCustom:PF0CustomFuncRegistration',
            'desc' => [
                'en' => 'PF0 Custom Func Registration',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
