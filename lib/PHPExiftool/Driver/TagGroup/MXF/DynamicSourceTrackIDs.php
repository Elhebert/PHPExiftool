<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DynamicSourceTrackIDs extends AbstractTagGroup
{
    protected string $id = 'MXF:DynamicSourceTrackIDs';

    protected string $name = 'DynamicSourceTrackIDs';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Dynamic Source Track I Ds',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118267
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:DynamicSourceTrackIDs',
            'desc' => [
                'en' => 'Dynamic Source Track I Ds',
            ],
        ],
    ];

    protected int $count = 0;
}
