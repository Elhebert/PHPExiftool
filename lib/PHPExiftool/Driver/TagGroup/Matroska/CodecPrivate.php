<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CodecPrivate extends AbstractTagGroup
{
    protected string $id = 'Matroska:CodecPrivate';

    protected string $name = 'CodecPrivate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Codec Private',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119649
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'Matroska::Main.Matroska:CodecPrivate',
            'desc' => [
                'en' => 'Codec Private',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
