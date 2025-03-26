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
class AutoBracketingSet extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AutoBracketingSet';

    protected string $name = 'AutoBracketingSet';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto Bracketing Set',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD800
             * line : 154000
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD800.NikonCustom:AutoBracketingSet',
            'desc' => [
                'en' => 'Auto Bracketing Set',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
