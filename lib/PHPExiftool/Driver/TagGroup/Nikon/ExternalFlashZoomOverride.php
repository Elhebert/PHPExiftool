<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalFlashZoomOverride extends AbstractTagGroup
{
    protected string $id = 'Nikon:ExternalFlashZoomOverride';

    protected string $name = 'ExternalFlashZoomOverride';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'External Flash Zoom Override',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 131887
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:ExternalFlashZoomOverride',
            'desc' => [
                'en' => 'External Flash Zoom Override',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
