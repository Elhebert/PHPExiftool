<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML_office;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Lines extends AbstractTagGroup
{
    protected string $id = 'HTML-office:Lines';

    protected string $name = 'Lines';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Lines',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::Office
             * line : 98563
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::Office.HTML-office:Lines',
            'desc' => [
                'en' => 'Lines',
            ],
        ],
    ];

    protected int $count = 0;
}
