<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CBOR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AuthorIdentifier extends AbstractTagGroup
{
    protected string $id = 'CBOR:AuthorIdentifier';

    protected string $name = 'AuthorIdentifier';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Author Identifier',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CBOR::Main
             * line : 2284
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'CBOR::Main.CBOR:AuthorIdentifier',
            'desc' => [
                'en' => 'Author Identifier',
            ],
        ],
    ];

    protected int $count = 0;
}
