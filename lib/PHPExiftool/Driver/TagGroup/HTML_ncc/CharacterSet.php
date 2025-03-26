<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML_ncc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CharacterSet extends AbstractTagGroup
{
    protected string $id = 'HTML-ncc:CharacterSet';

    protected string $name = 'CharacterSet';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Character Set',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::ncc
             * line : 98716
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::ncc.HTML-ncc:CharacterSet',
            'desc' => [
                'en' => 'Character Set',
            ],
        ],
    ];

    protected int $count = 0;
}
