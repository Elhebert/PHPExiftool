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
class SubDialFrameAdvanceRating2 extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:SubDialFrameAdvanceRating2';

    protected string $name = 'SubDialFrameAdvanceRating2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sub Dial Frame Advance Rating 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 170073
             * type : ?
             * writable : false
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonSettings::Main.NikonSettings:SubDialFrameAdvanceRating2',
            'desc' => [
                'en' => 'Sub Dial Frame Advance Rating 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 36;
}
