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
class EmbeddedImage2 extends AbstractTagGroup
{
    protected string $id = 'Samsung:EmbeddedImage2';

    protected string $name = 'EmbeddedImage2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Embedded Image 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Trailer
             * line : 234344
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Samsung::Trailer.Samsung:EmbeddedImage2',
            'desc' => [
                'en' => 'Embedded Image 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
