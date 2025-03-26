<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewPICT extends AbstractTagGroup
{
    protected string $id = 'QuickTime:PreviewPICT';

    protected string $name = 'PreviewPICT';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Preview PICT',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Main
             * line : 228816
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'QuickTime::Main.QuickTime:PreviewPICT',
            'desc' => [
                'en' => 'Preview PICT',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::Main
             * line : 228840
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'QuickTime::Main.QuickTime:PreviewPICT',
            'desc' => [
                'en' => 'Preview PICT',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
