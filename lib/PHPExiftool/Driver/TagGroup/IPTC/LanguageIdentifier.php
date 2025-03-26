<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LanguageIdentifier extends AbstractTagGroup
{
    protected string $id = 'IPTC:LanguageIdentifier';

    protected string $name = 'LanguageIdentifier';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Language Identifier',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 104004
             * type : string
             * writable : true
             * count : 3
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:LanguageIdentifier',
            'desc' => [
                'en' => 'Language Identifier',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2048;
}
