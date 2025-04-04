<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_mwg_kw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class KeywordInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-mwg-kw:KeywordInfo';

    protected string $name = 'KeywordInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Keyword Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MWG::Keywords
             * line : 113717
             * type : struct
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MWG::Keywords.XMP-mwg-kw:KeywordInfo',
            'desc' => [
                'en' => 'Keyword Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
