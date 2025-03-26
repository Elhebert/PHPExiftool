<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PostScript;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TIFFPreview extends AbstractTagGroup
{
    protected string $id = 'PostScript:TIFFPreview';

    protected string $name = 'TIFFPreview';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'TIFF Preview',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PostScript::Main
             * line : 212616
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'PostScript::Main.PostScript:TIFFPreview',
            'desc' => [
                'en' => 'TIFF Preview',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
