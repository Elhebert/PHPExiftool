<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LimitAFAreaModeSelGroup extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:LimitAFAreaModeSelGroup';

    protected string $name = 'LimitAFAreaModeSelGroup';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Limit AF Area Mode Sel Group',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 169718
             * type : ?
             * writable : false
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonSettings::Main.NikonSettings:LimitAFAreaModeSelGroup',
            'desc' => [
                'en' => 'Limit AF Area Mode Sel Group',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 36;
}
