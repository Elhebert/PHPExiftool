<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Doc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Comment extends AbstractTagGroup
{
    protected string $id = 'MIE-Doc:Comment';

    protected string $name = 'Comment';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Comment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Doc
             * line : 111333
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::Doc.MIE-Doc:Comment',
            'desc' => [
                'en' => 'Comment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
