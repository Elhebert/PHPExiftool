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
class InitialZoomLiveView extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:InitialZoomLiveView';

    protected string $name = 'InitialZoomLiveView';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Initial Zoom Live View',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142632
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:InitialZoomLiveView',
            'desc' => [
                'en' => 'Initial Zoom Live View',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
