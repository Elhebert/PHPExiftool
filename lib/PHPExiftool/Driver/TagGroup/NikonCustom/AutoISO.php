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
class AutoISO extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AutoISO';

    protected string $name = 'AutoISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145670
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:AutoISO',
            'desc' => [
                'en' => 'Auto ISO',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153482
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:AutoISO',
            'desc' => [
                'en' => 'Auto ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
