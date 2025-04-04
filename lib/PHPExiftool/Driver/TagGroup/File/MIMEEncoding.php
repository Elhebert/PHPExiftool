<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MIMEEncoding extends AbstractTagGroup
{
    protected string $id = 'File:MIMEEncoding';

    protected string $name = 'MIMEEncoding';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MIME Encoding',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Text::Main
             * line : 279661
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Text::Main.File:MIMEEncoding',
            'desc' => [
                'en' => 'MIME Encoding',
            ],
        ],
    ];

    protected int $count = 0;
}
