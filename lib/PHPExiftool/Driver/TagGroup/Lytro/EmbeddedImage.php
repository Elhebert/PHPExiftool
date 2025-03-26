<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Lytro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EmbeddedImage extends AbstractTagGroup
{
    protected string $id = 'Lytro:EmbeddedImage';

    protected string $name = 'EmbeddedImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Lytro::Main
             * line : 162345
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Lytro::Main.Lytro:EmbeddedImage',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
