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
class MonoSourceTrackIDs extends AbstractTagGroup
{
    protected string $id = 'MXF:MonoSourceTrackIDs';

    protected string $name = 'MonoSourceTrackIDs';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Mono Source Track I Ds',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118150
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:MonoSourceTrackIDs',
            'desc' => [
                'en' => 'Mono Source Track I Ds',
            ],
        ],
    ];

    protected int $count = 0;
}
