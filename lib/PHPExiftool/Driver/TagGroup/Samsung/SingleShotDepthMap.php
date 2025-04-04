<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SingleShotDepthMap extends AbstractTagGroup
{
    protected string $id = 'Samsung:SingleShotDepthMap';

    protected string $name = 'SingleShotDepthMap';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Single Shot Depth Map',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Trailer
             * line : 235069
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Samsung::Trailer.Samsung:SingleShotDepthMap',
            'desc' => [
                'en' => 'Single Shot Depth Map',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
