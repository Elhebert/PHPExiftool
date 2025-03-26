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
class TransferFilmFrameRate extends AbstractTagGroup
{
    protected string $id = 'MXF:TransferFilmFrameRate';

    protected string $name = 'TransferFilmFrameRate';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Transfer Film Frame Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114470
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TransferFilmFrameRate',
            'desc' => [
                'en' => 'Transfer Film Frame Rate',
            ],
        ],
    ];

    protected int $count = 0;
}
