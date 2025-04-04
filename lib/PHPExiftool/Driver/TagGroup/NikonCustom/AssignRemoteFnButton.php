<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AssignRemoteFnButton extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AssignRemoteFnButton';

    protected string $name = 'AssignRemoteFnButton';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Assign Remote Fn Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145540
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:AssignRemoteFnButton',
            'desc' => [
                'en' => 'Assign Remote Fn Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155684
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AssignRemoteFnButton',
            'desc' => [
                'en' => 'Assign Remote Fn Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
