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
class EmbeddedVideoFile extends AbstractTagGroup
{
    protected string $id = 'Samsung:EmbeddedVideoFile';

    protected string $name = 'EmbeddedVideoFile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Embedded Video File',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Trailer
             * line : 234371
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Samsung::Trailer.Samsung:EmbeddedVideoFile',
            'desc' => [
                'en' => 'Embedded Video File',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
