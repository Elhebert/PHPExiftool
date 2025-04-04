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
class ContinuousModeLiveView extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ContinuousModeLiveView';

    protected string $name = 'ContinuousModeLiveView';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Continuous Mode Live View',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 157565
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:ContinuousModeLiveView',
            'desc' => [
                'en' => 'Continuous Mode Live View',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
