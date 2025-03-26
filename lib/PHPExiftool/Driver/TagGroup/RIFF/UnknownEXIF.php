<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnknownEXIF extends AbstractTagGroup
{
    protected string $id = 'RIFF:UnknownEXIF';

    protected string $name = 'UnknownEXIF';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Unknown EXIF',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::Main
             * line : 231740
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'RIFF::Main.RIFF:UnknownEXIF',
            'desc' => [
                'en' => 'Unknown EXIF',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
